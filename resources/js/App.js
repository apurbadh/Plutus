import './App.css';
import Navbar from './components/Navbar';
import { Route, BrowserRouter, Switch } from 'react-router-dom';
import Home from './components/pages/HomePage/Home';
import Footer from './components/pages/Footer/Footer';
import Login from './components/pages/Login/Login';
import SignUp from './components/pages/SignUp/SignUp';
import Contact from './components/pages/Contact/Contact';

function App() {
  return (
    <BrowserRouter>
      <Navbar />
      <Switch>
        <Route path='/' exact component={Home}/>
        <Route path='/sign-up' component={SignUp}/>
        <Route path='/login' component={Login}/>
        <Route path='/contact' component={Contact}/>
      </Switch>
      <Footer />
    </BrowserRouter>
  );
}

export default App;
