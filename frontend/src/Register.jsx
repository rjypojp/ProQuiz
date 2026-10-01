import { useState } from "react";
import { Link } from 'react-router-dom'
import './Register.css'

function Register() {
    const [name, setName] = useState("");
    const [password, setPassword] = useState("");
    const handleRegister = async () => {
        await fetch("http://localhost:8000/sanctum/csrf-cookie", {
            credentials: "include",
        });

        const xsrfToken = decodeURIComponent(
            document.cookie
                .split("; ")
                .find((row) => row.startsWith("XSRF-TOKEN"))
                ?.split("=")[1] || ""
        );

        const response = await fetch("http://localhost:8000/register", {
            method: "POST",
            credentials: "include",
            headers: {
                "Content-Type": "application/json",
                "X-XSRF-TOKEN": xsrfToken,
            },
            body: JSON.stringify({
                name: name,
                password: password,
                password_confirmation: password,
            }),
        });

        if(response.ok) {
            window.location.href = "http://localhost:5173/";
        }

    };

    return (
        <div className="register-page">

            <div className="quiz-navigation">
                <Link to="/">トップページ</Link>
                <Link to="/quiz">クイズ</Link>
                <Link to="/login">ログイン</Link>
            </div>

            <h2 className="register-title">ユーザー登録</h2>

            <div className="register-form">

                <div>
                    <input
                        type="text"
                        placeholder="ユーザー名"
                        value={name}
                        onChange={(e) => setName(e.target.value)}
                    />
                </div>

                <div>
                    <input
                        type="password"
                        placeholder="パスワード"
                        value={password}
                        onChange={(e) => setPassword(e.target.value)}
                    />
                </div>

                <button onClick={handleRegister}>登録</button>
            
            </div>
        </div>
    );
}

export default Register;