<!DOCTYPE html>
<html>
<head>
	<title>jjj</title>
</head>
<body>
	<script type="text/javascript">
		var store=prompt("ENTER A NUMBER");
		var num=parseInt(store);
		var a=0
		for (i=1;i<=num;i++)
		{
			if(num % i==0)
				{a++}
			else
				{a+=0}
		}
		if (a==2)
			{
				document.write("prime number")
			}
		else
			{
				document.write("not prime")
			}
	</script>

</body>
</html>
