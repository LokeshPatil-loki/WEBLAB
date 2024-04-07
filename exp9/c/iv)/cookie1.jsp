<!-- cookie1.jsp -->
<%@ page language="java" import="java.sql.*" errorPage="" %>
<%
String name = request.getParameter("name1");
Cookie c1 = new Cookie("firstname", name);
response.addCookie(c1);
c1.setMaxAge(50 * 60); // Set cookie lifetime to 50 minutes
%>
<form method="get" action="http://localhost:8080/e9c4/cookie2.jsp">
    <input type="submit" value="List Cookies">
</form>