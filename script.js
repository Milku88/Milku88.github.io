// Optional JavaScript code for form validation

const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
	event.preventDefault();
	const username = document.getElementById('username').value;
	const tweet = document.getElementById('tweet').value;

	if (username.trim() === '' || tweet.trim() === '') {
		alert('Please fill in all fields.');
	} else {
		form.submit();
	}
});
