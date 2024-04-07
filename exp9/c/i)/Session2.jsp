<%@ page language="java" import="java.util.*" errorPage="" %>
<%
    Date d2 = new Date();
    String un = (String) session.getAttribute("user");
    Long t1 = (Long) session.getAttribute("time");
    Long t2 = d2.getTime();
%>

Thank you <%= un %>
Session duration: <%= (t2 - t1) / (60 * 1000) %> minutes

<%
    session.invalidate();
%>