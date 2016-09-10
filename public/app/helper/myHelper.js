function apiModifyTable(originalData,id,response){
    angular.forEach(originalData, function (item,key) {
        if(item._id == id){
            originalData[key] = response;
        }
    });
    return originalData;
}
