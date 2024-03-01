PHP Project
DATABASE DIAGRAM:

The database diagram presented in the attached image shows the structure of a relational database that stores information about individuals' administration at ANAF. The database consists of 9 tables:

Personal Data: This entity contains personal information about an individual. Attributes include a unique identifier (ID_Person), CNP (personal numeric code, equivalent to a social security number), name, surname, ID of the birth locality, parents' names, date of birth, and other personal details.

Residence Data: This entity stores information about an individual's residence. It includes a unique identifier (ID_Address), as well as details about the county, locality, street, street number, building type, floor, and apartment.

Identity Document Data: This entity manages individuals' identity document data. It includes a document identifier, type of identity document, series, number, issue date, issuing authority ID, expiration date, and validity.

CNP History: Maintains the history of changes to an individual's CNP. It includes the history ID, person ID, old CNP value, and modification date.

Marital Status: Stores information about an individual's marital status, such as married, unmarried, divorced, etc.

Locality: Entity managing information about localities. It includes a unique identifier for the locality, corresponding county ID, locality name, and code.

District: Stores information about districts, with a unique ID for each district and its name.

Street: This entity contains details about streets, including a unique street identifier, name, county ID, and associated locality ID.

S.P.C.L.E.P: No details are provided about this entity in the ERD diagram, but depending on the context, it could represent a governmental entity or authority issuing official documents such as identity cards.

The relationships between tables in the database, according to entity-relationship diagrams (ERD), are designed to show how the tables interact with each other. Relationships are often described in terms of "cardinality" and "referential integrity." Here's the description of the relationships between the tables in the diagram you provided:

Personal Data - Residence Data: An individual (recorded in "Personal Data") can have one or more residences (recorded in "Residence Data"), indicating a "one-to-many" relationship. This is represented by the line connecting "ID_Person" from "Personal Data" to "ID_Person" in "Residence Data".

Personal Data - Identity Document Data: An individual can have one or more identity documents. This is represented by another "one-to-many" relationship between "ID_Person" in "Personal Data" and "ID_Person" in "Identity Document Data".

Personal Data - CNP History: This is a "one-to-many" relationship indicating that an individual can have multiple records in the CNP history, with each CNP change recorded separately. "ID_Person" from "Personal Data" connects to "ID_Person" in "CNP History".

Personal Data - Marital Status: The relationship between these tables is not clearly defined in the diagram as there is no direct line between them, but there could be a "one-to-one" or "one-to-many" relationship depending on whether the marital status changes and is recorded multiple times in the database.

Residence Data - Locality: There is a "many-to-one" relationship between "Residence Data" and "Locality", where multiple residential addresses can be in the same locality. "ID_Locality" from "Residence Data" connects to "ID_Locality" in "Locality".

Locality - District: Each locality belongs to a single district, indicating a "many-to-one" relationship between "Locality" and "District".

Residence Data - Street: Similar to the relationship with "Locality", there is a "many-to-one" relationship between residential addresses and streets, where multiple addresses can be on the same street.

Street - Locality: A street is associated with a locality, forming a "many-to-one" relationship.

Identity Document Data - S.P.C.L.E.P: Assuming S.P.C.L.E.P is the entity issuing identity documents, there would be a "many-to-one" relationship between identity documents and S.P.C.L.E.P.

Queries:
Query 1: Display streets from a locality

Query 2: Display streets

Query 3: Display streets from a given locality

Query 4: Display streets

Query 5: Display street names and codes

Query 6: Addresses of individuals with a certain last name

Query 7: Display individuals residing in a district
