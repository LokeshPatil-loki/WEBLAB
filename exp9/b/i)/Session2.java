import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
import java.util.*;

public class Session2 extends HttpServlet {
    public void doGet(HttpServletRequest req, HttpServletResponse res) throws IOException, ServletException {
        try {
            res.setContentType("text/html");
            PrintWriter out = res.getWriter();
            HttpSession session = req.getSession();
            Date d2 = new Date();
            String un = (String) session.getAttribute("user");
            Long t1 = (Long) session.getAttribute("time");
            Long t2 = d2.getTime();
            session.invalidate();
            out.println("Thank you\t" + un);
            out.println("<br><br> Session duration: " + (t2 - t1) / (60 * 1000) + " minutes");
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}