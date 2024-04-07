// DateSrv.java
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class DateSrv extends HttpServlet {

    public void doGet(HttpServletRequest req, HttpServletResponse res)
            throws IOException, ServletException {
        res.setContentType("text/html");
        PrintWriter pw = res.getWriter();

        java.util.Date date = new java.util.Date();
        pw.println("<html>");
        pw.println("<style>");
        pw.println(".watermark {");
        pw.println("    position: absolute;");
        pw.println("    top: 10%;");
        pw.println("    left: 10%;");
        pw.println("    transform: translate(-50%, -50%);");
        pw.println("    font-size: 48px;");
        pw.println("    font-weight: bold;");
        pw.println("    color: rgba(118, 118, 118, 0.603);");
        pw.println("    pointer-events: none;");
        pw.println("    user-select: none;");
        pw.println("}");
        pw.println("</style>");
        pw.println("<body>");
        pw.println("<div class=\"watermark\">ZIYA</div>");
        pw.println("<h3>Current Date & Time: " + date.toString() + "</h3>");
        pw.println("</body></html>");

        pw.close();
    }
}