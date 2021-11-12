<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
     <table border="1">
       <tr bgcolor="#9acd32">
         <th style="text-align:left">Изображение</th>
         <th style="text-align:left">Язык</th>
         <th style="text-align:left">Рейтинг</th>
         <th style="text-align:left">Описание</th>
       </tr>
       <xsl:for-each select="languages/language">
         <tr>
           <td>
             <img height="100" width="100">
               <xsl:attribute name="src">
                 <xsl:value-of select="kartinka"/>
               </xsl:attribute>
             </img>
           </td>
           <td><xsl:value-of select="name"/></td>
           <td><xsl:value-of select="ratings"/></td>
           <td><xsl:value-of select="description"/></td>
         </tr>
       </xsl:for-each>
     </table>
  </xsl:template>
</xsl:stylesheet>
