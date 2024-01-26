// signup.js
const { connect, Request, close } = require=('mssql');

const config = {
    server: '.', // Update with your SQL Server's name
    database: 'test', // Update with your database name
    options: {
        trustedConnection: true, // Use Windows authentication
    },
};

function signup() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Check if passwords match
    if (password !== confirmPassword ) {
        document.getElementById('signupMessage').innerHTML = '<p>Passwords do not match</p>';
        return;
    }

    connect(config, err => {
        if (err) {
            console.error(err.message);
            return;
        }

        const request = new Request();

        // Check if the username already exists
        request.query(`SELECT * FROM Users WHERE username = '${username}'`, (err, result) => {
            if (err) {
                console.error(err.message);
                close();
                return;
            }

            if (result.recordset.length > 0) {
                // Username already exists
                document.getElementById('signupMessage').innerHTML = '<p>Username already taken</p>';
                close();
            } else {
                // Insert the new user into the Users table
                request.query(`INSERT INTO Users (username, password) VALUES ('${username}', '${password}')`, (err) => {
                    if (err) {
                        console.error(err.message);
                        document.getElementById('signupMessage').innerHTML = '<p>Error during signup</p>';
                    } else {
                        // Signup successful
                        document.getElementById('signupMessage').innerHTML = '<p>Signup successful!</p>';
                    }

                    close();
                });
            }
        });
    });
}

module.exports= signup;
