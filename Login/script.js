const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');

signInButton.addEventListener('click', function() {
    signInForm.style.display = "block";
});

signInButton.addEventListener('click', function() {
    const sname = document.getElementById('sname').value;
    const iDs = document.getElementById('iDs').value;
    const student = students.find(student => student.id === iDs && student.name === sname);

    if (student) {
        // Redirect to homepage
        window.location.href = 'homepage.php';
    } else {
        alert('Invalid ID or Name');
    }
});

document.getElementById('signInButton').addEventListener('click', function() {
    document.getElementById('signIn').style.display = 'block';
});