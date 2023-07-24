function incrementScore(judgeId) {
	const scoreElement = document.querySelector(`.score-${judgeId}`);
	let score = parseFloat(scoreElement.textContent);
	if (score < 10) {
		score += 0.1;
	}
	scoreElement.textContent = score.toFixed(1);
}

function decrementScore(judgeId) {
	const scoreElement = document.querySelector(`.score-${judgeId}`);
	let score = parseFloat(scoreElement.textContent);
	if (score > 5) {
		score -= 0.1;
	}
	scoreElement.textContent = score.toFixed(1);
}

function resetScores() {
	const scoreElements = document.querySelectorAll('[class^="score-"]');
	scoreElements.forEach((element) => {
		element.textContent = '5';
	});
}