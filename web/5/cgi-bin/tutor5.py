#!/usr/bin/python3
import cgi, sys
form = cgi.FieldStorage()         # извлечь данные из формы
print("Content-type: text/html")  # плюс пустая строка

html1 = """
<TITLE>User answer</TITLE>
<H1>User answer</H1>
<table border =2> <tr>  <td>Name</td><td>Value</td>  </tr>
"""

# печать заголовка таблицы
print(html1)


ll = ['name', 'skills', 'job', 'language', 'comment', 'image']

data = ['', '', '', '', '', '']
i = 0
for field in ('name', 'shoesize', 'job', 'language', 'comment', 'imagePath'):
    if not field in form:
        data[i] = '(unknown)'
    else:

        if not isinstance(form[field], list):
            data[i] = form[field].value
        else:
            values = [x.value for x in form[field]]
            data[i] = ', '.join(values)
    i+=1

for i in range(6):
    if ll[i] != 'image':
        print('<tr><td> %s </td> <td> %s </td></tr>' % (ll[i], data[i]))
    else:
        print('<tr><td> %s </td> <td><img src="%s"></td></tr>' % (ll[i], data[i]))

print(' </table>')


