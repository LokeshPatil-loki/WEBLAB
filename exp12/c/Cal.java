import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Cal extends HttpServlet {
    public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter pw = response.getWriter();

        int n1 = Integer.parseInt(request.getParameter("t1"));
        int n2 = Integer.parseInt(request.getParameter("t2"));
        String op = request.getParameter("op");

        if (op.equals("+")) {
            pw.println("Addition :::" + (n1 + n2));
        } else if (op.equals("-")) {
            pw.println("Subtraction :::" + (n1 - n2));
        } else if (op.equals("*")) {
            pw.println("Multiplication :::" + (n1 * n2));
        } else if (op.equals("/")) {
            pw.println("Division :::" + (n1 / n2));
        } else {
            pw.println("Remainder :::" + (n1 % n2));
        }

        pw.close();
    }
}