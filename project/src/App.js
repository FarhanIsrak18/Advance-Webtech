import logo from './logo.svg';
import './App.css';
import login from './customer/login';
import registration from './customer/registration';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
        <a href='login.js'>login</a>
      </header>
    </div>
  );
}

export default App;
