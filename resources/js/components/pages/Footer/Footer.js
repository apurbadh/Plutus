import React from 'react';
import './Footer.css';
import ReactDOM from 'react-dom';
import { FaFacebook, FaInstagram, FaTwitter, FaLinkedin } from 'react-icons/fa';


function Footer() {
  return (
    <div className='footer-container'>
      <div className='footer-links'>
        <div className='footer-link-wrapper'>
          <div className='footer-link-items'>
            <h2>Quick Links</h2>
            <a href='/'>Home</a>
            <a href='/about'>About</a>
            <a href='/contact'>Contact</a>
            <a href='/register'>SignUp</a>
          </div>
        </div>
        <div className='footer-link-wrapper'>
          <div className='footer-link-items'>
            <h2>Member Area</h2>
            <a href='/register'>Sign Up</a>
            <a href='/login'>LogIn</a>
          </div>
          <div className='footer-link-items'>
            <h2>Social Media</h2>
            <a href='/'>Instagram</a>
            <a href='/'>Facebook</a>
            <a href='/'>Twitter</a>
            <a href='/'>LinkedIn</a>
          </div>
        </div>
      </div>
      <section className='social-media'>
        <div className='social-media-wrap'>
          <div className='footer-logo'>
            <a href='/' className='social-logo'>
            <img className="navbar-icon" src="/images/logo_text.png" height="90" width="180"
                  alt="Plutus" />
            </a>
          </div>
          <small className='website-rights'>Plutus Wallet © 2021</small>
          <div className='social-icons'>
            <a className='social-icon-link' href='/'>
              <FaFacebook />
            </a>
            <a className='social-icon-link' href='/'>
              <FaInstagram />
            </a>
            <a className='social-icon-link' href='/'>
              <FaTwitter />
            </a>
            <a className='social-icon-link' href='/'>
              <FaLinkedin />
            </a>
          </div>
        </div>
      </section>
    </div>
  );
}

export default Footer;

if (document.getElementById("footer-react"))
{
    ReactDOM.render(<Footer/>, document.getElementById("footer-react"))
}
