```mermaid
st=>start:开始|past:>http://www.google.com[blank]
en=>end:结束:>http://www.google.com
a1=>condition:条件1
a2=>condition:条件2
a3=>condition:条件3
io=>inputoutput:输出

st->a1(yes,right)->a2(yes,right)->a3(yes,right)->io->en
a1(no)->en
a2(no)->en
a3(no)->en
```
