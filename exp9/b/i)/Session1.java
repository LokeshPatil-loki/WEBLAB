import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
import java.util.*;

public class Session1 extends HttpServlet {
    public void doGet(HttpServletRequest req, HttpServletResponse res) throws IOException, ServletException {
        try {
            res.setContentType("text/html");
            PrintWriter out = res.getWriter();
            out.println("<form method=get action=session2>");
            Date d = new Date();
            out.println("<p align=right> Time:" + d.getTime() + "</p>");
            String un = req.getParameter("uname");
            HttpSession session = req.getSession();
            session.setAttribute("user", un);
            session.setAttribute("time", d.getTime());
            out.println("Hello\t" + un);
            out.println("<br><br> <input type=submit value=logout>");
            out.println("</form");
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}