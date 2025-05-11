<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <title>Users List</title>
      </head>
      <body>
        <h2>User Information</h2>
        <table border="1">
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
          </tr>
          <xsl:for-each select="users/user">
            <tr>
              <td><xsl:value-of select="name"/></td>
              <td><xsl:value-of select="age"/></td>
              <td><xsl:value-of select="email"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
