<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Untuk query manual (vulnerable)
use App\Models\CustomUser; // Untuk query aman (Secure)

class LoginController extends Controller
{
    // --- 1. HALAMAN VIEW ---
    public function showVulnForm() {
        return view('login_vuln');
    }

    public function showSecureForm() {
        return view('login_secure');
    }

// --- 2. LOGIKA RENTAN (VULNERABLE) ---
    public function loginVuln(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Query mentah
        $query = "SELECT * FROM custom_users WHERE username = '$username' AND password = '$password'";
        
        // Jalankan query
        // Kita gunakan try-catch agar jika error query syntax, halaman tidak crash total
        try {
            $users = DB::select($query);
        } catch (\Exception $e) {
             return "<div style='background:black; color:red; padding:20px;'><h1>SQL Error!</h1><p>".$e->getMessage()."</p></div>";
        }
        
        if ($users) {
            // LOGIN BERHASIL -> Panggil View dashboard_vuln
            $user = $users[0];
            return view('dashboard_vuln', [
                'username' => $user->username,
                'query' => $query
            ]);
        } else {
            // LOGIN GAGAL -> Tampilkan error sederhana (tapi dipercantik sedikit)
            return "<body style='background:#f8d7da; display:flex; justify-content:center; align-items:center; height:100vh; font-family:sans-serif;'>
                        <div style='text-align:center; color:#842029;'>
                            <h1>LOGIN GAGAL!</h1>
                            <p>Query: <code>$query</code></p>
                            <a href='/vuln'>Kembali</a>
                        </div>
                    </body>";
        }
    }

// --- 3. LOGIKA AMAN (SECURE) ---
    public function loginSecure(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = CustomUser::where('username', $username)
                          ->where('password', $password)
                          ->first();

        if ($user) {
            // LOGIN BERHASIL -> Panggil View dashboard_secure
            return view('dashboard_secure', [
                'username' => $user->username
            ]);
        } else {
            // LOGIN GAGAL -> Tampilan error sederhana
            return "<body style='background:#d1e7dd; display:flex; justify-content:center; align-items:center; height:100vh; font-family:sans-serif;'>
                        <div style='text-align:center; color:#0f5132;'>
                            <h1>LOGIN GAGAL!</h1>
                            <p>Sistem aman. Kredensial salah.</p>
                            <a href='/secure'>Kembali</a>
                        </div>
                    </body>";
        }
    }
}
