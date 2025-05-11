<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
</head>
<body>
    <h1>Form Submission Result</h1>
    <%
        String name = request.getParameter("name");
        String email = request.getParameter("email");
    %>
    <p>Name: <%= name %></p>
    <p>Email: <%= email %></p>
    <a href="first.jsp">Go Back</a>
</body>
</html>