import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class LoginServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;

    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        String username = request.getParameter("username");
        String password = request.getParameter("password");

        PrintWriter out = response.getWriter();
        response.setContentType("text/html");

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

            // Check if a user with the provided credentials exists
            if (rs.next()) {
                out.println("<html><body><h2>Login Successful!</h2></body></html>");
            } else {
                out.println("<html><body><h2>Login Failed!</h2></body></html>");
            }

            // Clean up resources
            rs.close();
            statement.close();
            conn.close();
        } catch (SQLException | ClassNotFoundException e) {
            e.printStackTrace();
            out.println("<html><body><h2>Error: " + e.getMessage() + "</h2></body></html>");
        }
    }
}