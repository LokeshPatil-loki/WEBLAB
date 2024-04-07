<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <%@ page language="java" %>
    <%
        int num1 = Integer.parseInt(request.getParameter("num1"));
        int num2 = Integer.parseInt(request.getParameter("num2"));
        String operation = request.getParameter("rl");

        if (operation.equals("Add")) {
            int add = num1 + num2;
            out.println("Addition is: " + add);
        } else if (operation.equals("Sub")) {
            int sub = num1 - num2;
            out.println("Subtraction is: " + sub);
        } else if (operation.equals("mul")) {
            int mul = num1 * num2;
            out.println("Multiplication is: " + mul);
        } else if (operation.equals("div")) {
            if (num2 != 0) {
                int div = num1 / num2;
                out.println("Division is: " + div);
            } else {
                out.println("The division cannot be performed");
            }
        }
    %>
</body>
</html>