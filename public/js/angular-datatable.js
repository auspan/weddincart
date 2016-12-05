//Angularjs row editables and jquery.datatable  with ui.bootstrap and ui.utils
//Onces edit button is pressed table row order will change editable row will come in current pages top so don't get confuse

var app=angular.module('formvalid', ['ui.bootstrap','ui.utils']);
app.controller('validationCtrl',function($scope){
  $scope.data=[
        [
            1,
            "Abhishak",
            "abhishak@gmail.com",
            "8803421340"
          
        ],
        [
		2,
            "Sarvin Yadav",
            "sarvin@gmail.com",
            "7803421340"
        ],
        [
		3,
            "Puja Sharma",
            "puja@gmail.com",
            "97603421340"
        ],
        [
		4,
            "Jiten",
            "jiten@gmail.com",
            "9803421340"
        ],
        
       5
        [
             "Abhishak",
            "abhishak@gmail.com",
            "8803421340"
        ],
    ]


$scope.dataTableOpt = {
   //custom datatable options
  "aLengthMenu": [[10, 50, 100,-1], [10, 50, 100,'All']],
  };
  $scope.selected=[];
  $scope.getTemplates=function(n){
    //some time bellow if will throw expection like $scope.selected[0] is undefined
   if(n[0]===$scope.selected[0]){
     return "edit.html";
   }else{
    return "view.html";
   }
  };
  
  $scope.edit=function(u){     
    $scope.selected=angular.copy(u);
  };
  
  $scope.save=function(){
    //custom save function here 
    //Onces custom save function got success then empty it
    $.each($scope.data,(k,v)=>{
      if(v[0]===$scope.selected[0]){
        $scope.data[k]=$scope.selected;
      }
    });
     $scope.selected=[];
  };
  $scope.clear=function(){
    $scope.selected=[];
  };
});