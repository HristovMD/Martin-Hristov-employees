var app= angular.module('empapp',[]);

app.controller('empcontroller',function($scope,$http){
	$scope.insertdata=function(){
$http.post("insert.php",{'EmpID':$scope.EmpID,'ProjectID':$scope.ProjectID,'DateFrom':$scope.DateFrom,'DateTo':$scope.DateTo,'N':$scope.N })
		.success(function (data,status,headers,config)
		{
			console.log("data inserted successfully");
		});
	}

	});

