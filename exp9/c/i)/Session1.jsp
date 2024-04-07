<%@ page language="java" import="java.util.*" errorPage="" %>

<% 
    Date d = new Date();
%>

Time: <%= d.getTime() %>

<%
    String un = request.getParameter("uname");
    session.setAttribute("user", un);
    session.setAttribute("time", d.getTime());
%>

Hello <%= un %>
<a href="Session2.jsp">View Session Duration</a>