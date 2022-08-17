
var editTable = {
	field : "data-field",
	formatter : "data-formatter",
	hiddenRow : "data-hidden",
	type : "data-type",
	editable : "data-editable",
	readonly : "data-readonly",
	createExample:function(el){
		var nowIndex = 0;
		var nowIndexList = "";
		var trId = el+"trId";
		var template = "";
		var example = {};
		example.getNowIndex = function(){
			return nowIndex;
		};
		example.getNowIndexList = function(){
			return nowIndexList;
		};
		example.cleanDate = function(){
			nowIndex = 0;
			nowIndexList = "";
		};
		example.mapToObj = function(map){
		    var obj = {};
		    map.forEach(function(value,key){
				obj[key] = value;
			});
		    return obj;
		};
		example.getTableLength = function(){
			var length = 0;
			if(nowIndexList!=null && nowIndexList!=undefined && nowIndexList!=""){
				var list = nowIndexList.split(",");
				length = list.length-1;
			}
			return length;
		};
		example.getTableData = function(){
			if(template!=null && template!=undefined && template!=""){
				if(nowIndexList!=null && nowIndexList!=undefined && nowIndexList!=""){
					var list = nowIndexList.split(",");
					var tableData = new Array();
					for(var i=0;i<list.length-1;i++){
						var index = list[i].replace(trId,"");
						var map = new Map();
						for(var key in template){
							map.set(key,$("#"+key+index).val());
						}
						tableData[i] = example.mapToObj(map);
					}
					return JSON.stringify(tableData);
				}
			}
			return "";
		};
		example.getTableChangeData = function(){
			if(template!=null && template!=undefined && template!=""){
				if(nowIndexList!=null && nowIndexList!=undefined && nowIndexList!=""){
					var list = nowIndexList.split(",");
					var tableData = new Array();
					var indexChange = 0;
					for(var i=0;i<list.length-1;i++){
						var ischange = $("#"+list[i]).attr("ischange");
						if(ischange == "true"){
							var index = list[i].replace(trId,"");
							var map = new Map();
							for(var key in template){
								map.set(key,$("#"+key+index).val());
							}
							tableData[indexChange] = example.mapToObj(map);
							indexChange++;
						}
					}
					return JSON.stringify(tableData);
				}
			}else{
				throw new TypeError('The template is undefined!');
				return false;
			}
			return "";
		};
		example.addRow = function(el,rowData){
			var render = "";
			// json is not empty
			if(rowData==undefined || rowData==null || rowData==""|| el=="" || el==null){
				return false;
			}
			// table head
			var table = document.getElementById(el);
			var rows = table.rows;
			if(rows == undefined){
				throw new TypeError('The table element is not find!');
				return false;
			}
			var fieldList = new Array();
			var formatterList = new Array();
			var typeList = new Array();
			var readonlyList = new Array();
			var hiddenRowList = new Array();
			var editableList = new Array();
			for(var i=0; i<rows[0].cells.length; i++){
				var attr = rows[0].cells[i].attributes;
				for(var j=0;j<attr.length;j++){
					if(attr[j].name == editTable.field){
						fieldList.push(attr[j].value);
						//console.log(editTable.field, attr[j].value);
					}
					if(attr[j].name == editTable.formatter){
						formatterList.push(attr[j].value);
					}
					if(attr[j].name == editTable.hiddenRow){
						hiddenRowList.push(attr[j].value);
					}
					if(attr[j].name == editTable.type){
						typeList.push(attr[j].value);
					}
					if(attr[j].name == editTable.editable){
						editableList.push(attr[j].value);
					}
					if(attr[j].name == editTable.readonly){
						readonlyList.push(attr[j].value);
					}
				}
				// save cloumn order
				if(fieldList.length == i){
					fieldList.push("");
				}
				if(formatterList.length == i){
					formatterList.push("");
				}
				if(hiddenRowList.length == i){
					hiddenRowList.push("");
				}
				if(typeList.length == i){
					typeList.push("");
				}
				if(editableList.length == i){
					editableList.push("");
				}
				if(readonlyList.length == i){
					readonlyList.push("");
				}
			}
			for(var row in rowData){
				render += "<tr id='"+trId+nowIndex+"'>";
				// all list
				nowIndexList = nowIndexList+trId+nowIndex+","
				// tmplate render
				var templ = JSON.stringify(rowData[row]);
				var rowDataList = templ;
				// deep copy
				templ = JSON.parse(templ);
				for(var value in templ){
					templ[value]="";
				}
				// render temp
				template = templ;
				templ = JSON.stringify(templ);
				for(var i=0;i<fieldList.length;i++){
					if(editableList[i]=="true"){
						render += "<td style='text-align: center; width: 100px;'><a id='addRows"+nowIndex+"' style='font-size: 18px;font-weight: bolder;' class='addRows'  title='Add' style='font-size: 12px; font-weight: bolder;'  onclick=addRow('"+el+"','["+templ+"]','"+trId+nowIndex+"')>+</a> <a class='removeRows' onclick=delRow('"+el+"','["+rowDataList+"]','"+trId+nowIndex+"') title='Remove'>-</a></td>"
					}
					var isReadOnly = readonlyList[i]=="true"?"readonly='readonly'":"";
					if(fieldList[i]!=""){
						// field cloumn is exist
						if(formatterList[i]!=""){
							// formatter(value,el)
							var rowNowData = JSON.stringify(rowData[row]);
							var formatterReturn= eval(formatterList[i]+"('"+rowData[row][fieldList[i]]+"','"+fieldList[i]+nowIndex+"','"+rowNowData+"')");
							render += "<td>"+formatterReturn+"</td>";
						}else if(typeList[i]=="input"){
							if(hiddenRowList[i]=="true"){
								render += "<td style='display:none;'><input type='hidden' autocomplete='off' class='form-control input-text' id='"+fieldList[i]+nowIndex+"' value='"+rowData[row][fieldList[i]]+"' "+isReadOnly+"></td>"
							}else{
								render += "<td><input autocomplete='off' onchange=$(this).parent().parent().attr('ischange','true') class='form-control input-text' id='"+fieldList[i]+nowIndex+"' value='"+rowData[row][fieldList[i]]+"' "+isReadOnly+"></td>"
							}

						}else if(typeList[i]=="select"){
							//console.log(fieldList[i]+nowIndex);
							//console.log(rowData[row][fieldList[i]]);
							if (rowData[row][fieldList[i]]=="False")
							{
								render += "<td><select  class='form-control' id='"+fieldList[i]+nowIndex+"' value='"+rowData[row][fieldList[i]]+"' "+isReadOnly+"><option value='True'>True</option><option value='False' selected>False</option> </select></td>"
							} else{
								render += "<td><select  class='form-control' id='"+fieldList[i]+nowIndex+"' value='"+rowData[row][fieldList[i]]+"' "+isReadOnly+"><option value='True' selected>True</option><option value='False'>False</option> </select></td>"
							}
							//onchange=$(this).parent().parent().attr('ischange','true')
							//render += "<td><select  class='form-control' id='"+fieldList[i]+nowIndex+"' value='"+rowData[row][fieldList[i]]+"' "+isReadOnly+"><option value='True'>True</option><option value='False'>False</option> </select></td>"
						}else if(typeList[i]=="text"){
							render += "<td><input type='hidden' id='"+fieldList[i]+nowIndex+"' value='"+rowData[row][fieldList[i]]+"'><span>"+rowData[row][fieldList[i]]+"</span></td>"
						}else{
							render += "<td><input onchange=$(this).parent().parent().attr('ischange','true') class='form-control input-text' id='"+fieldList[i]+nowIndex+"' value='"+rowData[row][fieldList[i]]+"' "+isReadOnly+"></td>"
						}
					}
				}
				render +="</tr>";
				nowIndex++;
			}
			$("#"+el).prepend(render)
			return render;
		};
		example.delRow = function(rowId){
			$("#"+rowId).remove();
			if(nowIndexList!=null && nowIndexList!=undefined && nowIndexList!=""){
				nowIndexList = nowIndexList.replace(rowId+",","");
			}
		};
		return example;
	}
}
