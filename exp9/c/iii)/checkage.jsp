<%@ page language="java" import="java.sql.*" errorPage="" %>
<%
    String name;
    int age;
    name = request.getParameter("uname");
    age = Integer.parseInt(request.getParameter("uage"));
    if (age <= 18) {
        out.println("<h1>Hello\t " + name + "\t you are not eligible</h1>");
    } else {
        out.println("<h1>Welcome " + name + " to this site</h1>");
    }
%>