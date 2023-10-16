
const SOME_NUMBER = 100



function double(number) {
	return number * 2;
}

function triple(number) {
	return number * 3;
}

function square(number) {
	return number * number;
}

function doUltimateMath(number) {
	return double(number) + triple(number) * SOME_NUMBER;
}

export {
	doUltimateMath,
	square,
}

