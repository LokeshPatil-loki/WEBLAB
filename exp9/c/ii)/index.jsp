<html>
<head>
    <title>JSP App</title>
        <style>
        .watermark {
            position: absolute;
            top: 10%;
            left: 25%;
            transform: translate(-50%, -50%);
            font-size: 48px;
            font-weight: bold;
            color: rgba(118, 118, 118, 0.603);
            pointer-events: none;
            user-select: none;
        }
    </style>
    
</head>
<body>
    <div class="watermark">ZIYA</div>

    <form>
        <fieldset style="width:50%; background-color: #ccffeb;">
            <legend><b><i>JSP Application</i></b></legend>
            <h3>Current Date and Time is :</h3>
            <%
                java.util.Date d = new java.util.Date();
                out.println(d.toString());
            %>
        </fieldset>
    </form>
</body>
</html>