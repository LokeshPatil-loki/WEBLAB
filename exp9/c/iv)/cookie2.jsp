<!-- cookie2.jsp -->
<%@ page language="java" import="java.sql.*" errorPage="" %>
<title>List of Cookies</title>
<h1>List of Cookies</h1>
<%
Cookie[] cookies = request.getCookies();
%>
<table border="1">
    <tr>
        <% out.println("<td>Cookie Name</td><td>Cookie Value</td>"); %>
    </tr>
    <%
    if (cookies != null) {
        for (int i = 0; i < cookies.length; i++) {
            out.println("<tr><td>" + cookies[i].getName() + "</td><td>" + cookies[i].getValue() + "</td></tr>");
        }
    }
    %>
</table>