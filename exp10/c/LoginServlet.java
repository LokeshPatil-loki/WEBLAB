import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
import java.sql.*;

public class LoginServlet extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        // Get the username and password from the request
        String username = request.getParameter("username");
        String password = request.getParameter("password");

        // Validate the username and password against the database
        boolean isValid = validateUser(username, password);

        if (isValid) {
            // If valid, forward to the success page
            RequestDispatcher dispatcher = request.getRequestDispatcher("success.jsp");
            dispatcher.forward(request, response);
        } else {
            // If invalid, forward to the failure page
            RequestDispatcher dispatcher = request.getRequestDispatcher("failure.jsp");
            dispatcher.forward(request, response);
        }
    }

    private boolean validateUser(String username, String password) {
    	try {
            // Load the MySQL driver
            Class.forName("com.mysql.cj.jdbc.Driver");

            // Database connection details
            String url = "jdbc:mysql://localhost:3306/weblab";
            String dbUsername = "root";
            String dbPassword = "root";

            // Create a connection to the database
            Connection conn = DriverManager.getConnection(url, dbUsername, dbPassword);

            // Prepare the SQL query
            String sql = "SELECT * FROM users WHERE username = ? AND password = ?";
            PreparedStatement statement = conn.prepareStatement(sql);
            statement.setString(1, username);
            statement.setString(2, password);

            // Execute the query
            ResultSet rs = statement.executeQuery();
            boolean isValid = false;
            // Check if a user with the provided credentials exists
            if (rs.next()) {
                isValid = true;
            }

            // Clean up resources
            rs.close();
            statement.close();
            conn.close();
            return isValid;
        } catch (SQLException | ClassNotFoundException e) {
            e.printStackTrace();
            return false;
        }
    }
}