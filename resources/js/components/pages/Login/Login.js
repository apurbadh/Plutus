import React from 'react';
import './Login.css';

function SignUp() {
    return (
        <>
            <div className="container">
                <div className="title">Log In</div>
                <div className="content">
                <form action="#">
                    <div className="user-details">
                    <div className="input-box">
                        <span className="details">Username or Email</span>
                        <input type="text" placeholder="Enter your Username or Email" required />
                    </div>
                    <div className="input-box">
                        <span className="details">Password</span>
                        <input type="password" placeholder="Enter your Password" required />
                    </div>
                    </div>
                    <div className="gender-details">
                    <input type="radio" name="gender" id="dot-1" />
                    <input type="radio" name="gender" id="dot-2" />
                    <span className="gender-title">Save Login</span>
                    <div className="category">
                        <label for="dot-1">
                        <span className="dot one"></span>
                        <span className="gender">Yes</span>
                    </label>
                    <label for="dot-2">
                        <span className="dot two"></span>
                        <span className="gender">No</span>
                    </label>
                    </div>
                    </div>
                    <div className="button">
                    <input type="submit" value="Login" />
                    </div>
                </form>
                </div>
            </div>
        </>
    )
}

export default SignUp;
