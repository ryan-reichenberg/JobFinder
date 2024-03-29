<?php
    class Job {
        private $posId;
        private $jobTitle;
        private $description;
        private $fullTime;
        private $contract;
        private $applicationByMail;
        private $applicationByPost;
        private $closingDate;
        private $location;



        /**
         * Get Contract type
         * @return mixed
         */
        public function getContract()
        {
            return $this->contract;
        }

        /**
         * Set Contract type
         * @param mixed $contract
         */
        public function setContract($contract)
        {
            $this->contract = $contract;
        }

        /**
         * Get the value of posId
         *
         * @return  string
         */ 
        public function getPosId()
        {
                return $this->posId;
        }

        /**
         * Set the value of posId
         *
         * @param  string  $posId
         *
         * @return  self
         */ 
        public function setPosId($posId)
        {
                $this->posId = $posId;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of fullTime
         */ 
        public function getFullTime()
        {
                return $this->fullTime;
        }

        /**
         * Set the value of fullTime
         *
         * @return  self
         */ 
        public function setFullTime($fullTime)
        {
                $this->fullTime = $fullTime;

                return $this;
        }


        /**
         * Get the value of closingDate
         */ 
        public function getClosingDate()
        {
                return $this->closingDate;
        }

        /**
         * Set the value of closingDate
         *
         * @return  self
         */ 
        public function setClosingDate($closingDate)
        {
                $this->closingDate = $closingDate;

                return $this;
        }

        /**
         * Get the value of location
         */ 
        public function getLocation()
        {
                return $this->location;
        }

        /**
         * Set the value of location
         *
         * @return  self
         */ 
        public function setLocation($location)
        {
                $this->location = $location;

                return $this;
        }

        /**
         * Override string properties of this object.
         * @return serialized value of this object
         */
        public function __toString()
        {
            return serialize($this).PHP_EOL;
        }

        /**
         * Get Job Title
         * @return mixed
         */
        public function getJobTitle()
        {
            return $this->jobTitle;
        }

        /**
         * Set Job Title
         * @param mixed $jobTitle
         */
        public function setJobTitle($jobTitle)
        {
            $this->jobTitle = $jobTitle;
            return $this;
        }

        /**
         * Try to get corresponding value of parameter
         * @param $type
         * @return mixed|string
         */
        public function get($type){
            switch ($type){
                case "posId":
                    return strtolower($this->getPosId());
                case "title":
                    return strtolower($this->getJobTitle());
                case "closingDate":
                    return $this->getClosingDate();
                case "description":
                    return $this->getDescription();
                case "position":
                    return $this->getFullTime();
                case "location":
                    return strtolower($this->getLocation());
                case "contract":
                    return $this->getContract();
                case "email":
                    return $this->getApplicationByEMail();
                case "post":
                    return $this->getApplicationByPost();
            }
        }

        /**
         * * Try to set corresponding value of parameter
         * @param $type
         * @param $value
         */
        public function set($type, $value){
            switch ($type){
                case "posId":
                    $this->setPosId($value);
                    break;
                case "title":
                    $this->setJobTitle($value);
                    break;
                case "closingDate":
                    $this->setClosingDate($value);
                    break;
                case "description":
                    $this->setDescription($value);
                    break;
                case "position":
                    $this->setFullTime($value);
                    break;
                case "location":
                    $this->setLocation($value);
                    break;
                case "contract":
                    $this->setContract($value);
                    break;
                case "email":
                    $this->setApplicationByEMail($value);
                    break;
                case "post":
                    $this->setApplicationByPost($value);
                    break;
            }
        }

        /**
         * Get Is application by email
         * @return mixed
         */
        public function getApplicationByEMail()
        {
            return $this->applicationByMail;
        }

        /**
         * Get Is application by post
         * @return mixed
         */
        public function getApplicationByPost()
        {
            return $this->applicationByPost;
        }

        /**
         * Set Is application by email
         * @param mixed $applicationByPost
         */
        public function setApplicationbyEMail($applicationByMail)
        {
            $this->applicationByMail = $applicationByMail;
        }

        /**
         * Set Is application by email
         * @param mixed $applicationByPost
         */
        public function setApplicationByPost($applicationByPost)
        {
            $this->applicationByPost = $applicationByPost;
        }

        /**
         * Deserialize Job object from string
         * @param $entry
         * @return mixed
         */
        public static function fromString($entry)
        {
           return unserialize($entry);
        }

    }