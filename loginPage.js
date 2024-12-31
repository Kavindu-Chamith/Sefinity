const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// Check signup form fields and send data
function check_signup(event) {
    event.preventDefault(); 
    const upname = document.getElementById('upName').value;
    const upemail = document.getElementById('upEmail').value;
    const uppassword = document.getElementById('upPassword').value;

    // Email format validation
    const emailPattern = /^22CSE.*@ms\.sab\.ac\.lk$/i;
    
    if (!upname) {
        alert('Please enter your name');
    } else if (!upemail) {
        alert('Please enter your email');
    } else if (!emailPattern.test(upemail)) {
        alert('Invalid email address!');
    } else if (!uppassword) {
        alert('Please enter your password');
    } else {
        $.ajax({
            url: "register.php?id=signup",
            type: "POST",
            data: { upname, upemail, uppassword },
            success: function(response) {
                if (response.trim() == "0") {
                    alert('This email is already registered!');
                } else if (response.trim() == "1") {
                    alert("Account created successfully!");
                    window.location.href = 'academic/subject.php';  
                }
            },
            error: function() {
                alert("An error occurred during signup.");
            }
        });
    }
}

// Check signin form fields and send data
function check_signin(event) {
    event.preventDefault(); 
    const inemail = document.getElementById('inEmail').value;
    const inpassword = document.getElementById('inPassword').value;

    if (!inemail) {
        alert('Please enter your email');
    } else if (!inpassword) {
        alert('Please enter your password');
    } else {
        $.ajax({
            url: "register.php?id=signin",
            type: "POST",
            data: { inemail, inpassword },
            success: function(response) {
                if (response.trim() == "0") {
                    alert('Incorrect email or password!');
                } else {
                    window.location.href = 'academic/subject.php';  
                }
            },
            error: function() {
                alert("An error occurred during signin.");
            }
        });
    }
}
