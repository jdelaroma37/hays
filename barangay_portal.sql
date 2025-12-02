-- barangay_db.sql
CREATE DATABASE IF NOT EXISTS barangay_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE barangay_db;

CREATE TABLE IF NOT EXISTS residents (
  id INT AUTO_INCREMENT PRIMARY KEY,

  -- BASIC INFO
  photo VARCHAR(255) DEFAULT NULL,
  first_name VARCHAR(80) NOT NULL,
  middle_name VARCHAR(80) DEFAULT NULL,
  last_name VARCHAR(80) NOT NULL,
  suffix VARCHAR(20) DEFAULT NULL,
  gender ENUM('Female','Male','Other') DEFAULT NULL,
  date_of_birth DATE DEFAULT NULL,
  place_of_birth VARCHAR(150) DEFAULT NULL,
  civil_status ENUM('Single','Married','Widowed','Separated') DEFAULT NULL,
  religion VARCHAR(80) DEFAULT NULL,
  nationality VARCHAR(80) DEFAULT NULL,

  -- ADDRESS
  home_number VARCHAR(50) DEFAULT NULL,
  street VARCHAR(150) DEFAULT NULL,
  barangay VARCHAR(150) DEFAULT NULL,
  municipality VARCHAR(150) DEFAULT NULL,
  city_province VARCHAR(150) DEFAULT NULL,

  -- CONTACT INFO
  contact_number VARCHAR(50) DEFAULT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  confirm_password VARCHAR(255) NOT NULL,

  -- PARENTS / GUARDIAN
  father_name VARCHAR(150) DEFAULT NULL,
  mother_name VARCHAR(150) DEFAULT NULL,
  guardian_name VARCHAR(150) DEFAULT NULL,
  guardian_contact VARCHAR(50) DEFAULT NULL,

  -- VOTER STATUS
  voter ENUM('Yes','No') DEFAULT NULL,
  registered_voter ENUM('Yes','No') DEFAULT NULL,
  voter_in_barangay ENUM('Yes','No') DEFAULT NULL,
  precinct_number VARCHAR(50) DEFAULT NULL,

  -- SOCIAL CATEGORY (LGU STANDARD)
  senior_citizen ENUM('Yes','No') DEFAULT NULL,
  pwd ENUM('Yes','No') DEFAULT NULL,
  disability_type VARCHAR(150) DEFAULT NULL,
  solo_parent ENUM('Yes','No') DEFAULT NULL,
  youth_member ENUM('Yes','No') DEFAULT NULL,
  ip_member ENUM('Yes','No') DEFAULT NULL,
  ofw_household_member ENUM('Yes','No') DEFAULT NULL,
  pregnant_woman ENUM('Yes','No') DEFAULT NULL,
  lactating_mother ENUM('Yes','No') DEFAULT NULL,
  chronic_illness ENUM('Yes','No') DEFAULT NULL,
  immunization_updated ENUM('Yes','No') DEFAULT NULL,
  emergency_risk_level ENUM('Low','Medium','High') DEFAULT NULL,

  -- EDUCATION
  currently_studying ENUM('Yes','No') DEFAULT NULL,
  grade_year_level VARCHAR(100) DEFAULT NULL,
  highest_educ_attainment VARCHAR(150) DEFAULT NULL,

  -- CONTACT PERSON (EMERGENCY)
  emergency_contact_person VARCHAR(150) DEFAULT NULL,
  emergency_relationship VARCHAR(100) DEFAULT NULL,
  emergency_contact_number VARCHAR(50) DEFAULT NULL,

  -- RESIDENCY
  years_of_residency INT DEFAULT NULL,
  resident_type ENUM('Permanent', 'Transient') DEFAULT NULL,
  household_number VARCHAR(100) DEFAULT NULL,
  household_head ENUM('Yes','No') DEFAULT NULL,
  resident_since_birth ENUM('Yes','No') DEFAULT NULL,

  -- SOURCE OF INCOME (MAIN CATEGORY)
  income_category ENUM(
      'Employed', 'Self-Employed', 'Unemployed',
      'Student', 'Pensioner', 'OFW', 'Dependent'
  ) DEFAULT NULL,

  -- IF EMPLOYED
  occupation VARCHAR(150) DEFAULT NULL,
  work_department VARCHAR(150) DEFAULT NULL,
  employer VARCHAR(150) DEFAULT NULL,
  type_of_work ENUM('Private','Government','Overseas') DEFAULT NULL,
  monthly_income_range VARCHAR(100) DEFAULT NULL,

  -- IF SELF-EMPLOYED
  business_type VARCHAR(150) DEFAULT NULL,
  business_name VARCHAR(150) DEFAULT NULL,
  business_income_range VARCHAR(100) DEFAULT NULL,

  -- IF STUDENT
  school_name VARCHAR(150) DEFAULT NULL,
  student_year_level VARCHAR(100) DEFAULT NULL,
  student_supported_by ENUM('Parents','Scholarship') DEFAULT NULL,

  -- IF PENSIONER
  pension_type ENUM('SSS','GSIS','Private') DEFAULT NULL,
  monthly_pension VARCHAR(100) DEFAULT NULL,

  -- IF OFW
  ofw_country VARCHAR(150) DEFAULT NULL,
  ofw_job_position VARCHAR(150) DEFAULT NULL,
  ofw_agency VARCHAR(150) DEFAULT NULL,

  -- SOCIAL ASSISTANCE
  beneficiary_4ps ENUM('Yes','No') DEFAULT NULL,
  social_pension_beneficiary ENUM('Yes','No') DEFAULT NULL,
  sss_pensioner ENUM('Yes','No') DEFAULT NULL,
  gsis_pensioner ENUM('Yes','No') DEFAULT NULL,
  philhealth_member ENUM('Yes','No') DEFAULT NULL,
  other_cash_assistance ENUM('Yes','No') DEFAULT NULL,
  child_4ps_beneficiary ENUM('Yes','No') DEFAULT NULL,
  disaster_vulnerable ENUM('Yes','No') DEFAULT NULL,
  evacuation_assistance ENUM('Yes','No') DEFAULT NULL,
  livelihood_assistance ENUM('Yes','No') DEFAULT NULL,
  registered_farmer ENUM('Yes','No') DEFAULT NULL,
  registered_fisherfolk ENUM('Yes','No') DEFAULT NULL,

  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/* ------------------------------------------- FAMILY MEMBER ------------------------------------------------ */

CREATE TABLE family_members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    resident_id INT NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    middle_name VARCHAR(100),
    last_name VARCHAR(100) NOT NULL,
    gender ENUM('Male','Female','Other') NOT NULL,
    date_of_birth DATE NOT NULL,
    place_of_birth VARCHAR(255),
    civil_status ENUM('Single','Married','Widowed','Divorced','Separated'),
    voter ENUM('Yes','No'),
    pwd ENUM('Yes','No'),
    solo_parent ENUM('Yes','No'),
    relationship ENUM('Mother', 'Father', 'Grandmother', 'Grandfather', 'Sister', 'Brother') NOT NULL,
    contact_number VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (resident_id) REFERENCES residents(id) ON DELETE CASCADE
);


/* ------------------------------------------- ADMIN ------------------------------------------------ */

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/* ------------------------------------------- ADMIN ------------------------------------------------ */

CREATE TABLE document_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    documentType VARCHAR(100) NOT NULL,
    pdf_name VARCHAR(255),
    dateRequested DATE NOT NULL,
    status ENUM('Pending', 'Processing', 'Ready to Pick Up') DEFAULT 'Pending',
    file VARCHAR(255) NOT NULL -- to match the JSON filename reference
);

