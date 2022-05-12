from zeep import Client
from zeep import xsd
from datetime import date, datetime
import json

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
	#print(response["Devices"]["DeviceReference"][x]["Name"])  
	#print(x)
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
                  "Name": "Potencia contratada"
                }
              },
              "AllAttributes": "false"
            },
            {
              "AttributeGroupType": "DeviceParameters",
              "AttributeReferences": {
                "AttributeReference": {
                  "Name": "Alimentador"
                }
              },
              "AllAttributes": "false"
            },
            {
              "AttributeGroupType": "DeviceParameters",
              "AttributeReferences": {
                "AttributeReference": {
                  "Name": "PD"
                }
              },
              "AllAttributes": "false"
            },
            {
              "AttributeGroupType": "DeviceParameters",
              "AttributeReferences": {
                "AttributeReference": {
                  "Name": "Numero de usuario"
                }
              },
              "AllAttributes": "false"
            },
            {
              "AttributeGroupType": "DeviceParameters",
              "AttributeReferences": {
                "AttributeReference": {
                  "Name": "Numero de medidor"
                }
              },
              "AllAttributes": "false"
            },
            {
              "AttributeGroupType": "DeviceParameters",
              "AttributeReferences": {
                "AttributeReference": {
                  "Name": "DeviceID"
                }
              },
              "AllAttributes": "false"
            },
            {
              "AttributeGroupType": "DeviceParameters",
              "AttributeReferences": {
                "AttributeReference": {
                  "Name": "Barrio"
                }
              },
              "AllAttributes": "false"
            },
            {
              "AttributeGroupType": "DeviceParameters",
              "AttributeReferences": {
                "AttributeReference": {
                  "Name": "SuccessfulLastDateTime"
                }
              },
              "AllAttributes": "false"
            },
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
	#aresponse = client.service.QueryDeviceAttributes(**arequest_data)
	bwsdl = "http://clvmweb.clyfsa.com:81/SEP2WebServices/DataService.svc?singleWsdl"
	bclient = Client(bwsdl)

	brequest_data ={
	    "measurementPointResultTypes": {
	      "MeasurementPointResultTypeReferences": {
	        "MeasurementPointName": response["Devices"]["DeviceReference"][x]["Name"],
	        "AgencyId": "0",
	        "ResultTypeNames":  "ActivePowerComb(|+A|+|-A|)_INST_LP1",
	        
	      }
	    },
	    "intervalStart": "2022-02-01T00:00:00",
	    "intervalEnd": "2022-12-31T23:45:00",
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
	        "ResultTypeNames": "Voltage_L1_INST_LP2"
	      }
	    },
	    "intervalStart": "2022-02-01T00:00:00",
	    "intervalEnd": "2022-12-31T23:45:00",
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
	        "ResultTypeNames": "Voltage_L2_INST_LP2"
	      }
	    },
	    "intervalStart": "2022-02-01T00:00:00",
	    "intervalEnd": "2022-12-31T23:45:00",
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
	        "ResultTypeNames": "Voltage_L3_INST_LP2"
	      }
	    },
	    "intervalStart": "2022-02-01T00:00:00",
	    "intervalEnd": "2022-12-31T23:45:00",
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
	aresponse = client.service.QueryDeviceAttributes(**arequest_data)
	#print(aresponse)
	bresponse = bclient.service.QueryResults(**brequest_data)
	cresponse = bclient.service.QueryResults(**crequest_data)
	dresponse = bclient.service.QueryResults(**drequest_data)
	eresponse = bclient.service.QueryResults(**erequest_data)
	#alldvcs.append(aresponse)
	#alldvcs.append(bresponse)
	#alldvcs.append(cresponse)
	#alldvcs.append(dresponse)
	#alldvcs.append(eresponse)
	alldvcs.append(response["Devices"]["DeviceReference"][x]["Name"])
	alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][0]['Value']['Value'])
	#alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][1]['Value']['Value'])
	alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][2]['Value']['Value'])
	#alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][3]['Value']['Value'])
	alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][4]['Value']['Value'])
	alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][5]['Value']['Value'])
	#alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][6]['Value']['Value'])
	if  aresponse[0]['Attributes']['AttributeInfo'][6]['Value']['Value'] == 'ALGESA 08' or aresponse[0]['Attributes']['AttributeInfo'][6]['Value']['Value'] == 'ALGESA 06' :
		alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][6]['Value']['Value'])
	else:
		alldvcs.append(aresponse[0]['Attributes']['AttributeInfo'][7]['Value']['Value'])	
	#print(aresponse[0]['Attributes']['AttributeInfo'][7]['Value']['Value'])
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
	if hasattr(eresponse[0].ResultsByResultType, 'ResultTypeResults'):
		if hasattr(bresponse[0].ResultsByResultType.ResultTypeResults[0], 'Results'):
			if hasattr(bresponse[0].ResultsByResultType.ResultTypeResults[0].Results, 'Result'):
				
				dateasd= str(bresponse[0]['ResultsByResultType']['ResultTypeResults'][0]['Results']['Result'][0]['Timestamp'])
				alldvcs.append(dateasd)
			else:
				alldvcs.append('n/a')
		else:
			alldvcs.append('n/a')
	else:
		alldvcs.append('n/a')	
		
	#print(bresponse[0]["ResultsByResultType"]["ResultTypeResults"][0]["Results"]["Result"][0]["Value"]["Value"])
	#alldvcs.append('NOPE')
	#ele = (input("Name : ")) 
    #d = json.loads(s)
print (alldvcs)

with open('/var/www/html/virtualenvs/Cl/soapclient/data.json', 'w', encoding='utf-8') as f:
    json.dump(alldvcs, f, ensure_ascii=False, indent=4)

	# prints [1,3,5]    
#aresponse = aclient.service.QueryDeviceAttributes(**raequest_data)

#print (alldvcs)
