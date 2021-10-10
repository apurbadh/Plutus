import React from 'react';
import './Footer.css';
import { Link } from 'react-router-dom';
import { FaFacebook, FaInstagram, FaTwitter, FaLinkedin } from 'react-icons/fa';


function Footer() {
  return (
    <div className='footer-container'>
      <div className='footer-links'>
        <div className='footer-link-wrapper'>
          <div className='footer-link-items'>
            <h2>Quick Links</h2>
            <Link to='/'>Home</Link>
            <Link to='/about'>About</Link>
            <Link to='/contact'>Contact</Link>
            <Link to='/sign-up'>SignUp</Link>
          </div>
        </div>
        <div className='footer-link-wrapper'>
          <div className='footer-link-items'>
            <h2>Member Area</h2>
            <Link to='/sign-up'>Sign Up</Link>
            <Link to='/login'>LogIn</Link>
          </div>
          <div className='footer-link-items'>
            <h2>Social Media</h2>
            <Link to='/'>Instagram</Link>
            <Link to='/'>Facebook</Link>
            <Link to='/'>Twitter</Link>
            <Link to='/'>LinkedIn</Link>
          </div>
        </div>
      </div>
      <section className='social-media'>
        <div className='social-media-wrap'>
          <div className='footer-logo'>
            <Link to='/' className='social-logo'>
            <img className="navbar-icon" src="images/logo_text.png" height="90" width="180"
                  alt="Plutus" />
            </Link>
          </div>
          <small className='website-rights'>Plutus Wallet © 2021</small>
          <div className='social-icons'>
            <Link className='social-icon-link' to='/'>
              <FaFacebook />
            </Link>
            <Link className='social-icon-link' to='/'>
              <FaInstagram />
            </Link>
            <Link className='social-icon-link' to='/'>
              <FaTwitter />
            </Link>
            <Link className='social-icon-link' to='/'>
              <FaLinkedin />
            </Link>
          </div>
        </div>
      </section>
    </div>
  );
}

export default Footer;
