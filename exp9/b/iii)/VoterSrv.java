import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class VoterSrv extends HttpServlet {
    public void doGet(HttpServletRequest req, HttpServletResponse res) throws IOException, ServletException {
        res.setContentType("text/html");
        PrintWriter pw = res.getWriter();

        String name = req.getParameter("name");
        int age = Integer.parseInt(req.getParameter("age"));

        if (age >= 18) {
            pw.println("<html><body>");
            pw.println("<h3>Hello " + name + ", you are authorized to visit the site.</h3>");
            pw.println("</body></html>");
        } else {
            pw.println("<html><body>");
            pw.println("<font color='red' size='4'>Hello " + name + ", you are not authorized to visit the site.</font>");
            pw.println("<a href='/e9b3'>Back</a>");
            pw.println("</body></html>");
        }

        pw.close();
    }
}