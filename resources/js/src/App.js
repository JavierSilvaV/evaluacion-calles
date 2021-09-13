import React from "react";
import ReactDOM from "react-dom";
import Index from "./pages";

const App = () => {
    return (
        <div>
            <Index />
        </div>
    );
};

export default App;

if (document.querySelector(".app")) {
    ReactDOM.render(<App />, document.querySelector(".app"));
}
