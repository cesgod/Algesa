from zeep import Client
from zeep import xsd
from datetime import date, datetime
import json

currentMonth = datetime.now().month
print(currentMonth)

wsdl = "http://clvmweb.clyfsa.com:81/SEP2WebServices/ManagementService.svc?singleWsdl"
client = Client(wsdl)

request_data ={
    "groupReference": {
      "Name": "Algesa-Activos",
    }
  }
response = client.service.QueryGroupMembers(**request_data)
#print (response)
#Here 'request_data' is the request parameter dictionary.
#Assuming that the operation named 'sendData' is defined in the passed wsdl.

#print (response)
lim = len(response["Devices"]["DeviceReference"])
alldvcs=[]
#print(lim)
#lim=20
#def myconverter(o):
#    if isinstance(o, datetime.datetime):
#        return o.__str__()
 

ddd=0
for x in range (lim):
	arequest_data ={
        "deviceReference": {
          "Name": response["Devices"]["DeviceReference"][x]["Name"],
        },
        "queryAll": "false",
        "attributeReferences": {
          "AttributeReferencesByGroup": [
            {
              "AttributeGroupType": "DeviceParameters",
              "AttributeReferences": {
                "AttributeReference": {
                  "Name": "Nombre del Cliente"
                }
              },
              "AllAttributes": "false"
            }
          ]
        }
      }
	#print(response["Devices"]["DeviceReference"][x]["Name"])  
	#print(x)
	
	#aresponse = client.service.QueryDeviceAttributes(**arequest_data)
	bwsdl = "http://clvmweb.clyfsa.com:81/SEP2WebServices/DataService.svc?singleWsdl"
	bclient = Client(bwsdl)

	brequest_data ={
	    "measurementPointResultTypes": {
	      "MeasurementPointResultTypeReferences": {
	        "MeasurementPointName": response["Devices"]["DeviceReference"][x]["Name"],
	        "AgencyId": "0",
	        "ResultTypeNames":  "AbsoluteEnergy_T0_BP1",
	        
	      }
	    },
	    "intervalStart": "2022-02-02T00:00:00",
	    "intervalEnd": "2022-12-01T23:45:00",
	    "statusFilter": "null",
	    "sourceFilter": {
	      "Measured": "true",
	      "Manual": "false",
	      "Aggregated": "false",
	      "Imported": "false",
	      "Estimated": "false"
	    },
	    "resultOrigin": "PreferRaw",
	    "lastResultOnly": "true"
	  }

	#bresponse = bclient.service.QueryResults(**brequest_data)
	crequest_data ={
	    "measurementPointResultTypes": {
	      "MeasurementPointResultTypeReferences": {
	        "MeasurementPointName": response["Devices"]["DeviceReference"][x]["Name"],
	        "AgencyId": "0",
	        "ResultTypeNames": "AbsoluteEnergy_T1_BP1"
	      }
	    },
	    "intervalStart": "2022-02-02T00:00:00",
	    "intervalEnd": "2022-12-01T23:45:00",
	    "statusFilter": "null",
	    "sourceFilter": {
	      "Measured": "true",
	      "Manual": "false",
	      "Aggregated": "false",
	      "Imported": "false",
	      "Estimated": "false"
	    },
	    "resultOrigin": "PreferRaw",
	    "lastResultOnly": "true"
	  }

	#cresponse = bclient.service.QueryResults(**crequest_data)
	drequest_data ={
	    "measurementPointResultTypes": {
	      "MeasurementPointResultTypeReferences": {
	        "MeasurementPointName": response["Devices"]["DeviceReference"][x]["Name"],
	        "AgencyId": "0",
	        "ResultTypeNames": "AbsoluteEnergy_T2_BP1"
	      }
	    },
	    "intervalStart": "2022-02-02T00:00:00",
	    "intervalEnd": "2022-12-01T23:45:00",
	    "statusFilter": "null",
	    "sourceFilter": {
	      "Measured": "true",
	      "Manual": "false",
	      "Aggregated": "false",
	      "Imported": "false",
	      "Estimated": "false"
	    },
	    "resultOrigin": "PreferRaw",
	    "lastResultOnly": "true"
	  }
	#dresponse = bclient.service.QueryResults(**drequest_data)
	#alldvcs.append(cresponse)
	erequest_data ={
	    "measurementPointResultTypes": {
	      "MeasurementPointResultTypeReferences": {
	        "MeasurementPointName": response["Devices"]["DeviceReference"][x]["Name"],
	        "AgencyId": "0",
	        "ResultTypeNames": "ReactiveEnergyPlus_CUM_T0_BP1"
	      }
	    },
	    "intervalStart": "2022-02-02T00:00:00",
	    "intervalEnd": "2022-12-01T23:45:00",
	    "statusFilter": "null",
	    "sourceFilter": {
	      "Measured": "true",
	      "Manual": "false",
	      "Aggregated": "false",
	      "Imported": "false",
	      "Estimated": "false"
	    },
	    "resultOrigin": "PreferRaw",
	    "lastResultOnly": "true"
	  }
	frequest_data ={
		"measurementPointResultTypes": {
		  "MeasurementPointResultTypeReferences": {
		    "MeasurementPointName": response["Devices"]["DeviceReference"][x]["Name"],
		    "AgencyId": "0",
		    "ResultTypeNames": "AbsoluteMaxDemand_T0_BP1"
		  }
		},
		"intervalStart": "2022-02-02T00:00:00",
		"intervalEnd": "2022-12-01T23:45:00",
		"statusFilter": "null",
		"sourceFilter": {
		  "Measured": "true",
		  "Manual": "false",
		  "Aggregated": "false",
		  "Imported": "false",
		  "Estimated": "false"
		},
		"resultOrigin": "PreferRaw",
		"lastResultOnly": "true"
	  }
	grequest_data ={
		"measurementPointResultTypes": {
		  "MeasurementPointResultTypeReferences": {
		    "MeasurementPointName": response["Devices"]["DeviceReference"][x]["Name"],
		    "AgencyId": "0",
		    "ResultTypeNames": "AbsoluteMaxDemand_T1_BP1"
		  }
		},
		"intervalStart": "2022-02-02T00:00:00",
		"intervalEnd": "2022-12-01T23:45:00",
		"statusFilter": "null",
		"sourceFilter": {
		  "Measured": "true",
		  "Manual": "false",
		  "Aggregated": "false",
		  "Imported": "false",
		  "Estimated": "false"
		},
		"resultOrigin": "PreferRaw",
		"lastResultOnly": "true"
	  }
	hrequest_data ={
		"measurementPointResultTypes": {
		  "MeasurementPointResultTypeReferences": {
		    "MeasurementPointName": response["Devices"]["DeviceReference"][x]["Name"],
		    "AgencyId": "0",
		    "ResultTypeNames": "AbsoluteMaxDemand_T2_BP1"
		  }
		},
		"intervalStart": "2022-02-02T00:00:00",
		"intervalEnd": "2022-12-01T23:45:00",
		"statusFilter": "null",
		"sourceFilter": {
		  "Measured": "true",
		  "Manual": "false",
		  "Aggregated": "false",
		  "Imported": "false",
		  "Estimated": "false"
		},
		"resultOrigin": "PreferRaw",
		"lastResultOnly": "true"
	  }
	#aresponse = client.service.QueryDeviceAttributes(**arequest_data)
	aresponse = client.service.QueryDeviceAttributes(**arequest_data)
	bresponse = bclient.service.QueryResults(**brequest_data)
	cresponse = bclient.service.QueryResults(**crequest_data)
	dresponse = bclient.service.QueryResults(**drequest_data)
	eresponse = bclient.service.QueryResults(**erequest_data)
	fresponse = bclient.service.QueryResults(**frequest_data)
	gresponse = bclient.service.QueryResults(**grequest_data)
	hresponse = bclient.service.QueryResults(**hrequest_data)
	#alldvcs.append(aresponse)
	#alldvcs.append(bresponse)
	#alldvcs.append(cresponse)
	#alldvcs.append(dresponse)
	#alldvcs.append(eresponse)

	alldvcs.append(response["Devices"]["DeviceReference"][x]["Name"])
	if hasattr(bresponse[0].ResultsByResultType, 'ResultTypeResults'):
		if hasattr(bresponse[0].ResultsByResultType.ResultTypeResults[0], 'Results'):
			if hasattr(bresponse[0].ResultsByResultType.ResultTypeResults[0].Results, 'Result'):
				
				alldvcs.append(bresponse[0].ResultsByResultType.ResultTypeResults[0].Results.Result[0].Value.Value)
			else:
				alldvcs.append('n/a')
		else:
			alldvcs.append('n/a')
	else:
		alldvcs.append('n/a')				
	if hasattr(cresponse[0].ResultsByResultType, 'ResultTypeResults'):
		if hasattr(cresponse[0].ResultsByResultType.ResultTypeResults[0], 'Results'):
			if hasattr(cresponse[0].ResultsByResultType.ResultTypeResults[0].Results, 'Result'):
				
				alldvcs.append(cresponse[0].ResultsByResultType.ResultTypeResults[0].Results.Result[0].Value.Value)
			else:
				alldvcs.append('n/a')
		else:
			alldvcs.append('n/a')
	else:
		alldvcs.append('n/a')	
	if hasattr(dresponse[0].ResultsByResultType, 'ResultTypeResults'):
		if hasattr(dresponse[0].ResultsByResultType.ResultTypeResults[0], 'Results'):
			if hasattr(dresponse[0].ResultsByResultType.ResultTypeResults[0].Results, 'Result'):
				
				alldvcs.append(dresponse[0].ResultsByResultType.ResultTypeResults[0].Results.Result[0].Value.Value)
			else:
				alldvcs.append('n/a')
		else:
			alldvcs.append('n/a')
	else:
		alldvcs.append('n/a')		
	if hasattr(eresponse[0].ResultsByResultType, 'ResultTypeResults'):
		if hasattr(eresponse[0].ResultsByResultType.ResultTypeResults[0], 'Results'):
			if hasattr(eresponse[0].ResultsByResultType.ResultTypeResults[0].Results, 'Result'):
				
				alldvcs.append(eresponse[0].ResultsByResultType.ResultTypeResults[0].Results.Result[0].Value.Value)
			else:
				alldvcs.append('n/a')
		else:
			alldvcs.append('n/a')
	else:
		alldvcs.append('n/a')		
	if hasattr(fresponse[0].ResultsByResultType, 'ResultTypeResults'):
		if hasattr(fresponse[0].ResultsByResultType.ResultTypeResults[0], 'Results'):
			if hasattr(fresponse[0].ResultsByResultType.ResultTypeResults[0].Results, 'Result'):
				
				alldvcs.append(fresponse[0].ResultsByResultType.ResultTypeResults[0].Results.Result[0].Value.Value)
			else:
				alldvcs.append('n/a')
		else:
			alldvcs.append('n/a')
	else:
		alldvcs.append('n/a')	
	if hasattr(gresponse[0].ResultsByResultType, 'ResultTypeResults'):
		if hasattr(gresponse[0].ResultsByResultType.ResultTypeResults[0], 'Results'):
			if hasattr(gresponse[0].ResultsByResultType.ResultTypeResults[0].Results, 'Result'):
				
				alldvcs.append(gresponse[0].ResultsByResultType.ResultTypeResults[0].Results.Result[0].Value.Value)
			else:
				alldvcs.append('n/a')
		else:
			alldvcs.append('n/a')
	else:
		alldvcs.append('n/a')
	if hasattr(hresponse[0].ResultsByResultType, 'ResultTypeResults'):
		if hasattr(hresponse[0].ResultsByResultType.ResultTypeResults[0], 'Results'):
			if hasattr(hresponse[0].ResultsByResultType.ResultTypeResults[0].Results, 'Result'):
				
				alldvcs.append(hresponse[0].ResultsByResultType.ResultTypeResults[0].Results.Result[0].Value.Value)
			else:
				alldvcs.append('n/a')
		else:
			alldvcs.append('n/a')
	else:
		alldvcs.append('n/a')	
	alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][0]['Value']['Value'])
	#print(bresponse[0]["ResultsByResultType"]["ResultTypeResults"][0]["Results"]["Result"][0]["Value"]["Value"])
	#alldvcs.append('NOPE')
	#ele = (input("Name : ")) 
    #d = json.loads(s)
print (alldvcs)

with open('/var/www/html/virtualenvs/Cl/soapclient/billing/Apr22/databill.json', 'w', encoding='utf-8') as f:
    json.dump(alldvcs, f, ensure_ascii=False, indent=4)

	# prints [1,3,5]    
#aresponse = aclient.service.QueryDeviceAttributes(**raequest_data)

#print (alldvcs)
