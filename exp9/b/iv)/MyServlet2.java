import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class MyServlet2 extends HttpServlet {
    public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html");
        PrintWriter pwriter = response.getWriter();
        Cookie[] c = request.getCookies();
        for (int i = 0; i < c.length; i++) {
            pwriter.print(c[i].getName() + ": " + c[i].getValue() + "<br>");
        }
        pwriter.close();
    }
}