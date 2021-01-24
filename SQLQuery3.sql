SELECT * FROM donation_locations.dbo.locationtag
SELECT * FROM donation_locations.dbo.location 

SELECT l.location_id
FROM   donation_locations.dbo.location l
WHERE  l.location_id IN (SELECT location_id FROM donation_locations.dbo.locationtag WHERE tag_id = 12);
