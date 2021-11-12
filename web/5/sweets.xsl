<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family: Arial; font-size: 12pt; background-color: #EEE">
   <xsl:for-each select="languages/language">
      <div style="background-color: teal; color: white; padding: 4px">
         <span style="font-weight: bold">
           Язык программирования:<xsl:value-of select="name"/> - рейтинг</span>
         <xsl:value-of select="ratings"/>
      </div>
      <div style="margin-left: 20px; margin-bottom: 1em; font-size: 10pt">
         <img height="100" width="100">
           <xsl:attribute name="src">
             <xsl:value-of select="kartinka"/>
           </xsl:attribute>
         </img>

         <p>
          <xsl:value-of select="description"/>
        </p>
      </div>
   </xsl:for-each>
</body>
</html>
