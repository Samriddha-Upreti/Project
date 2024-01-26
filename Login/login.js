import { connect, Request, close } from 'mssql';

async function login() {
    console.log("hgsfhgsh");

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    const config = {
        server: 'SHERINAS-PC\\MSSQLSERVER01', // Corrected the server name
        database: 'test',
        options: {
            trustedConnection: true, // Use Windows authentication
        },
    };

    try {
        const pool = await connect(config);

        const request = new Request();

        // Using parameterized query to prevent SQL injection
        request.input('username', username);
        request.input('password', password);

        const result = await request.query(`
            SELECT * FROM test WHERE username = @username AND password = @password
        `);

        if (result.recordset.length > 0) {
            // Authentication successful
            alert('Login successful!');
        } else {
            // Authentication failed
            alert('Invalid username or password');
        }

        await close();
    } catch (error) {
        console.error(error.message);
    }
}

export default login;
