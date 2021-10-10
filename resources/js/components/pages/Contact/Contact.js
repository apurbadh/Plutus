import React from 'react';
import ReactDOM from 'react-dom';
import './Contact.css';

function Contact() {
    return (
        <>
            <div className="container">
                <div className="title">Contact Us</div>
                <div className="content">
                <form action="#">
                    <div className="user-details">
                    <div className="input-box">
                        <span className="details">Full Name</span>
                        <input type="text" placeholder="Enter your Full Name" required />
                    </div>
                    <div className="input-box">
                        <span className="details">Email</span>
                        <input type="password" placeholder="Enter your Email" required />
                    </div>
                    <div className="input-box">
                        <span className="details">Message</span>
                        <textarea type="password" placeholder="Enter Message" required />
                    </div>
                    </div>

                    <div className="button">
                    <input type="submit" value="Send Message" />
                    </div>
                </form>
                </div>
            </div>
        </>
    )
}

export default Contact;

if (document.getElementById("contact"))
{
    ReactDOM.render(<Contact/>, document.getElementById("contact"))
}
