import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class MyServlet1 extends HttpServlet {
    public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html");
        PrintWriter pwriter = response.getWriter();
        String uname = request.getParameter("Name");
        String upassword = request.getParameter("Password");
        pwriter.print("Cookies Set:Hello " + uname);
        pwriter.print("Your Password is: " + upassword);
        //Creating two cookies
        Cookie c1 = new Cookie("Name", uname);
        Cookie c2 = new Cookie("Password", upassword);
        //Adding the cookies to response header
        response.addCookie(c1);
        response.addCookie(c2);
        pwriter.print("<a href='welcome'>View Cookies</a>");
        pwriter.close();
    }
}