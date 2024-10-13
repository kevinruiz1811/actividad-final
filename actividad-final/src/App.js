import logo from "./logo.svg";
import "./App.css";
import { Product } from "./components/Product/Product.jsx";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Product />
      </header>
    </div>
  );
}

export default App;
