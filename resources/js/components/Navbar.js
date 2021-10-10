import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import { FaBars, FaTimes } from 'react-icons/fa';
import { Button } from './Button';
import './Navbar.css';
import { IconContext } from 'react-icons/lib';

function Navbar() {
    const goToSignUp = () => {
        window.location = "/register"
    }
    const auth = document.getElementById("auth");
    const [click, setClick] = useState(false);
    const [button, setButton] = useState(true);

    const handleClick = () => setClick(!click);
    const closeMobileMenu = () => setClick(false);

    const showButton = () => {
        if(window.innerWidth <= 960) {
            setButton(false);
        } else {
            setButton(true);
        }
    };

    useEffect(() => {
        showButton();
    }, []);

    window.addEventListener('resize', showButton);

    return (
        <>
        <IconContext.Provider value={{ color: '#fff' }}>
            <div className="navbar">
                <div className="navbar-container container" height="50px">
                    <a href='/' className="navbar-logo" onClick={closeMobileMenu}>
                        <img className="navbar-icon" src="images/logo.png" height="70" width="70"
                            alt="Plutus" />
                    </a>
                    <div className="menu-icon" onClick={handleClick}>
                        {click ? <FaTimes /> : <FaBars />}
                    </div>
                    <ul className={click ? 'nav-menu active' : 'nav-menu'}>
                        <li className="nav-item">
                            <a href='/' className="nav-links" onClick={closeMobileMenu}>
                                Home
                            </a>
                        </li>
                        <li className="nav-item">
                            <a href='/about' className="nav-links" onClick={closeMobileMenu}>
                                About
                            </a>
                        </li>
                        <li className="nav-item">
                <a href='/contact' className="nav-links" onClick={closeMobileMenu}>
                                Contact
                            </a>
                        </li>
                        <li className="nav-btn">
                            {button ? (
                                auth ? <a href="/dashboard" className="btn-link"><Button buttonStyle='btn--outline'>Dashboard</Button></a>:
                                <a herf="/register" className="btn-link">
                                    <Button buttonStyle='btn--outline' onClick={goToSignUp} >Sign Up</Button>
                                </a>
                            ): (
                                <a className="btn-link">
                                    <Button href="/register" onClick={goToSignUp} buttonStyle='btn--outline'>
                                        Sign Up
                                    </Button>
                                </a>
                            )}
                        </li>
                    </ul>
                </div>
            </div>
        </IconContext.Provider>
        </>
    )
}

export default Navbar

if (document.getElementById("navbar-react"))
{
    ReactDOM.render(<Navbar/>, document.getElementById("navbar-react"))
}
