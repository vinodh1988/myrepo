var app=angular.module("mymod",["ngResource"]);

//Controller to read all sound track details
app.controller("mycontroller",['$scope','$resource',function($scope,$resource){
	$scope.homeflag=false;
	$scope.searchflag=true;
	$scope.addtrack=true;
	$scope.searchbox=false;
	
	tracks=$resource("http://104.197.128.152:8000/v1/tracks");
	tracks.get().$promise.then(function(result){
		
		$scope.tracks=result;
		
		//finding number of pages possible each page 20 records
		$scope.pages=result.count/20;
	    if(result.count%20!==0)
			$scope.pages=Math.floor($scope.pages)+1;
		
		//Pagination event handling
		
		
		
	});
	
	genres=$resource("http://104.197.128.152:8000/v1/genres");
	genres.get().$promise.then(function(result){
		$scope.genreNames=result.results;
	});
	//Action on pagination click
	$scope.changePage=function(x){
			tracks=$resource("http://104.197.128.152:8000/v1/tracks?page="+x);
		tracks.get().$promise.then(function(result){
			$scope.tracks=result;
		});
			
		};
	//search functionality
	$scope.searchString=function(x){
		$scope.searchflag=false;
		$scope.homeflag=true;
		http://104.197.128.152:8000/v1/tracks?title=
		tracks=$resource("http://104.197.128.152:8000/v1/tracks?title="+$scope.tracksearch);
		tracks.get().$promise.then(function(result){
			$scope.searchresults=result;
		});
	}
   // Home button functionality
   $scope.homeClick=function(){
	   alert('event is working');
	   $scope.searchflag=true;
	   $scope.homeflag=false;
	   $scope.addtrack=true;
	   $scope.searchbox=false;
   }
   
    //Add new functionality
    $scope.additem=function(){
		alert('event is working');
		$scope.addtrack=false;
		$scope.homeflag=true;
		$scope.searchbox=true;
		
		
	}
	
	$scope.newtrack=function(){
		alert($scope.tname+" "+$scope.rating+" "+$scope.genre);
		if($scope.tname.length==null)
			alert('please enter the track name');
		var send=$resource("http://104.197.128.152:8000/v1/tracks");
		send.save({title:$scope.tname,rating:$scope.rating,genres:[$scope.genre]}).$promise.then(function(data){
			alert("Data is stored");
			$scope.addtrack=true;
		     $scope.homeflag=false;
		    $scope.searchbox=false;
		});
	}
   
	
	////console.log($scope.tracks);
	//console.log($scope.tracks.count);
}]);

//Controller to control pagination
app.controller("pagination",['$scope','$resource',function($scope,$resource){
	
	$scope.start=1;
	$scope.end=5;
	

	$scope.iter=[1,2,3,4,5];
	//Previ
	$scope.previous=function(){
		var pages=$scope.$parent.pages;
		
		if($scope.start>5){
			$scope.start=$scope.start-5;
			$scope.iter=[];
		}
		else
			return;
		for(var x=$scope.start;x<=pages&&x<=$scope.start+5;x++)
			$scope.iter.push(x);
	}
	
		$scope.next=function(){
		var pages=$scope.$parent.pages;
	
		
		if($scope.end<pages){
			$scope.start=$scope.start+5;
			$scope.iter=[];
		}
	    else 
			return;
		for(var x=$scope.start;x<=pages&&x<=$scope.start+5;x++)
			$scope.iter.push(x);
	}
}]);

