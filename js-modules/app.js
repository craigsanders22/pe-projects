import {square, doUltimateMath} from "./library.js";

const outlet = document.querySelector('output');

let squareResult = square(4);
let ultimateMathResult = doUltimateMath(4);

outlet.innerHTML = `Square result: ${squareResult}<br>
	UltimateMath result: ${ultimateMathResult}`;
