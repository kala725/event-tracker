# How will you store tokens? What kind of database? Why?
	
	We can use postgres db for storing the tokens. As there is a fixed structure associated with tokens, it will be managible at whatever frequency.

## Assume ~10 million tokens will be generated per day; only a small fraction of these will ever be requested.

	If the reads are less, we can use something like DynamoDB to store key value pairs.

# How will you store open events? What kind of database? Why?

## Assume ~100k/opens/day
## Assume we need to store at-least 30 days of history

	Ideally we should store them as storage logs in the static storage / filesystem(s3 can be a good candidate for this). Then by processing these logs, we can derive all the required data into Postgres / Elastic Search depending on the analytical needs.

	Benifits : These events can be logged asynchonously, leaving very less room for any exceptions or processing related errors(like while fetching geoip, any delay or errors). Also we can process these logs at a later stage via a cron once in the time period and can extract all the relavant information from it. One more benifit is, it supports open structure and any number of arguments can be logged in, which can be filtered later.


# How will you generate stats? Will you need cron jobs to pre-compute some stats? Will you be able to provide real-time stats (pushes)? A simple diagram of the components will help.

	Using ElasticSearch or Solr, the aggression operations are much easier and faster to perform.


The structure will be like : 

Tracking Requests ----> Storage (s3) -----> ElasticSearch 
		                                        |
		                                        |
												|
												|
												V
												<---------> API <---------> DashBoard 